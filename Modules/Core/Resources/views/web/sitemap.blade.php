<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($urls as $page)
        @foreach($page as $value)
            <url>
                <loc>{{ url($value->slug) }}</loc>
                <lastmod>{{ gmdate(DateTime::W3C, strtotime($value->updated_at)) }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>{{ $value->priority }}</priority>
            </url>
        @endforeach
    @endforeach
</urlset>
