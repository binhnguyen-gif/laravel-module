<style>
    .builder .is-show {
        display: block;
    }

    .builder .is-hide {
        display: none;
    }

    .builder .collapsed .is-show {
        display: none;
    }

    .builder .collapsed .is-hide {
        display: block;
    }

    .builder .dd-empty {
        display: none;
    }

    .builder .dd {
        max-width: 100%;
    }

    .builder .tool-group{
        display: inline;
    }

    .dd-dragel .dd-handle-group,
    .builder .dd-handle-group {
        display: flex;
        margin: 5px 0;
    }

    .dd-dragel .dd-handle,
    .builder .dd-handle {
        flex: 1;
        margin: 0;
        border-radius: 0;
        border: 1px solid #cdcdcd;
        background: #fcfcfc;
        border-right: none;
        cursor: move;
        padding: 7px 10px;
        height: 34px;
    }

    .dd-handle-tool .add-item,
    .dd-handle-tool .edit-item,
    .dd-handle-tool .delete-item {
        color: #ffffff;
        display: inline-block;
        padding: 8px 10px;
        height: 34px;
        vertical-align: top;
    }

    .dd-handle-tool .add-item {
        background: #28a745;
    }

    .dd-handle-tool .edit-item {
        background: #007bff;
    }

    .dd-handle-tool .delete-item {
        background: #dc3545;
    }

</style>
