<link href="modules/addons/ideep_nat/assets/css/jquery-confirm.css" rel="stylesheet">
<script src="modules/addons/ideep_nat/assets/js/jquery-confirm.js"></script>
<div class="row">
    <div class="loading">
        <h1 style="text-align:center;color: #8f8f8f;font-weight: 500;font-size: 48px">
            <i class="fa fa-refresh fa-spin"></i> 请稍后 , 正在加载数据
        </h1>
    </div>
    <div class="nat-body" style="display:none">
        <div class="col-xs-12">
            <div class="row">
                <div class="form-group">
                    <label>请选择需要操作的服务</label>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class=" list-group" id="service-list"></div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="panel panel-default" id="service-panel-placeholder">
                            <div class="panel-body">
                                请从左边/上边选取服务
                            </div>
                        </div>
                        <div class="panel panel-default" id="service-panel-loading" style="display:none">
                            <h1 style="text-align:center;color: #8f8f8f;font-weight: 500;font-size: 48px">
                                <i class="fa fa-refresh fa-spin"></i> 请稍后 , 正在加载数据
                            </h1>
                        </div>
                        <div class="panel panel-default" id="service-panel" style="display:none">
                            <div class="panel-heading">
                                <h3 class="panel-title">端口映射列表</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-10 col-xs-12">
                                        <label>最大可映射端口数量</label>
                                        <div class="progress" style="margin-bottom: 0px;">
                                            <div class="progress-bar" role="progressbar" style="min-width: 3em;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="margin-top: 10px;">
                                        <button type="button" class="btn btn-primary" >添加规则
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <hr/>
                                    <div class="col-xs-12" style="margin-top: 10px;">
                                        <div class="alert alert-warning" role="alert">不会使用 ? <a href="https://docs.weloveidc.com/knowledge-base/whmcs-solusvm-nat%E6%8F%92%E4%BB%B6%E5%AE%A2%E6%88%B7%E4%BD%BF%E7%94%A8%E9%97%AE%E9%A2%98" target="_blank">点击此处查看教程 <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>内网IP</th>
                                            <th>内网端口</th>
                                            <th>方向</th>
                                            <th>公网IP</th>
                                            <th>公网端口</th>
                                            <th>协议</th>
                                            <th>状态</th>
                                            <th>动作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>192.168.1.1</td>
                                            <td>123</td>
                                            <td>=></td>
                                            <td>1.1.1.1</td>
                                            <td>123</td>
                                            <td>TCP</td>
                                            <td>test</td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Delete
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .nat-body,
    .nat-body button {
        font-family: Microsoft YaHei Light, Microsoft YaHei;
    }
</style>
