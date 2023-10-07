<style>
    #slug-input-{{$name}}{
        width: 50%;
        border: 1px solid #ccc;
    }
    .slug-generate a{
        color: #5369f8 !important;
    }
    #list-hashtag{
        gap: 5px;
        flex-wrap: wrap;
    }
    #list-hashtag .hashtag-item{
        border: 1px solid #dfd9d9;
        padding: 2px 12px 0px;
        border-radius: 26px;
        margin-bottom: 2px;
        cursor: pointer;
    }
    #list-hashtag .hashtag-item:hover{
        background-color: #efefef;
    }
    .recommend-hashtag{
        bottom: 100%;
        background: #fff;
        width: 100%;
        display: none;
    }
    .recommend-hashtag.active{
        display: block;
    }
    .recommend-hashtag span{
        display: block;
        padding: 3px 20px;
        border: 1px solid #f7f4f4;
        cursor: pointer;
    }
</style>
<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="hashtag-input position-relative">
        <input type="{{ isset($type) ? $type : 'text' }}"
           class="form-control"
           id="{{ $name }}"
           placeholder="{{ isset($placeholder) ? $placeholder : $label }}"
           value="{{ !empty($item->$name) ? $item->$name : old($name) }}"
           onkeydown="addHashtag(event)"
           oninput="searchHashtag(event)">
        <div class="recommend-hashtag position-absolute" id="recommend-hashtag">
        </div>
    </div>    
    <input type="hidden" name="{{ $name  }}" id="arrHashtag" value="">
    <div class="mt-2 list-hashtag d-flex" id="list-hashtag">
    @if($item !== null && $item->hashtags()->count() > 0)
       @foreach($item->hashtags as $hashtag)
            <p class="hashtag-item" onclick="removeHashtag(event)"> {{ $hashtag->hashtag }} </p>
       @endforeach
    @endif
    </div>

</div>


<script>
    const hashtagAdded = {!! json_encode(_get_array_hashtags()) !!}
    const elementRemommendHashtag = document.getElementById('recommend-hashtag');
    printHashtags(hashtagAdded);

    const listHashtagCurrent = {!! json_encode($item !== null ? $item->hashtags()->pluck('hashtag')->toArray() : []) !!};
    const ElementListHashtag = document.getElementById('arrHashtag');
    if (listHashtagCurrent.lenght > 0) ElementListHashtag.value = listHashtagCurrent;

    function printHashtags(hashtags) {
        const arrayHashtag = hashtags.map(hashtag => {
            return `<span onclick="addHashtagRCM(event)">${hashtag}</span>`;
        })
        const stringHashtag = arrayHashtag.join('')
        elementRemommendHashtag.innerHTML = stringHashtag
    }

    function searchHashtag(event) {
        let searchKey = event.target.value;
        if (searchKey !== "") {
            let newHashtags = hashtagAdded.filter(item => item.includes(searchKey));
            printHashtags(newHashtags);
            elementRemommendHashtag.classList.add("active");
        }
    }

    function addHashtag(event) {
        const key = event.charCode || event.keyCode || 0;
        const hashtag = event.target.value ?? undefined;
        if (key == 13 && hashtag != "" && hashtag != undefined) {
            event.preventDefault();
            document.getElementById('list-hashtag').insertAdjacentHTML('beforeend', `<p class="hashtag-item" onclick="removeHashtag(event)">#${hashtag}</p>`);
            event.target.value = "";

            listHashtagCurrent.push('#' + hashtag)
            ElementListHashtag.value = listHashtagCurrent;
        }
    }

    function removeHashtag(event) {
        let index = listHashtagCurrent.findIndex(hashtag => hashtag === event.target.textContent.trim())
        if (index !== -1) {
            listHashtagCurrent.splice(index, 1);
            event.target.remove();
            ElementListHashtag.value = listHashtagCurrent;
        }
    }

    function addHashtagRCM(event) {       
        let hashtag = event.target.textContent.trim();
        document.getElementById('list-hashtag').insertAdjacentHTML('beforeend', `<p class="hashtag-item" onclick="removeHashtag(event)">${hashtag}</p>`);
        listHashtagCurrent.push(hashtag)
        ElementListHashtag.value = listHashtagCurrent;
        elementRemommendHashtag.classList.remove("active");
    }

    function handleClick(event) {
    if (!elementRemommendHashtag.contains(event.elementRemommendHashtag)) {
            elementRemommendHashtag.classList.remove('active');
        }
    }

    window.addEventListener('click', handleClick);
</script>
