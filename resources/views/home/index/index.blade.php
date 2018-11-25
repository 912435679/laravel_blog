<head>
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="csrf-token">
</head>
<div>hello world!!!</div>
<form action="{{ url('/push') }}">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="请输入网站名">
        </div>
    </div>
    <div class="form-group">
        <label for="url" class="col-sm-2 control-label">链接</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="url" placeholder="请输入URL">
        </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="modal-footer">
            <button type="button" class="btn btn-primary center-block b-s-submit">提交</button>
        </div>
    </div>
</form>
<script src="js/app.js"></script>
<script>

    $('.b-s-submit').click(function () {
       alert('test');
    })
</script>