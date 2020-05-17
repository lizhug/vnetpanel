@extends('admin.layouts')
@section('css')
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="padding-top:0;">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="/admin/editNode" method="post" class="form-horizontal" onsubmit="return do_submit();">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <span class="caption-subject font-dark">基础信息</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="form-group">
                                                    <label for="is_udp" class="col-md-3 control-label">UDP</label>
                                                    <div class="col-md-3">
                                                        <input type="checkbox" class="make-switch" id="is_udp" {{$node->is_udp ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="启用" data-off-text="禁用">
                                                    </div>
                                                    <label for="is_dynamic" class="col-md-2 control-label">动态IP</label>
                                                    <div class="col-md-3">
                                                        <input type="checkbox" class="make-switch" id="is_dynamic" {{$node->is_dynamic ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="是" data-off-text="否">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="is_subscribe" class="col-md-3 control-label">订阅</label>
                                                    <div class="col-md-3">
                                                        <input type="checkbox" class="make-switch" id="is_subscribe" {{$node->is_subscribe ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="允许" data-off-text="禁止">
                                                    </div>
                                                    <label for="is_tcp_check" class="col-md-2 control-label">阻断检测</label>
                                                    <div class="col-md-3">
                                                        <input type="checkbox" class="make-switch" id="is_tcp_check" {{$node->is_tcp_check ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="开启" data-off-text="关闭">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-md-3 control-label"> 名称 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="name" value="{{$node->name}}" id="name" autocomplete="off" autofocus required>
                                                        <input type="hidden" name="id" value="{{$node->id}}">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="server" class="col-md-3 control-label"> 域名 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="server" value="{{$node->server}}" id="server" autocomplete="off" placeholder="填则优先显示，为动态IP时必填">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ip" class="col-md-3 control-label"> IPv4地址 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="ip" value="{{$node->ip}}" id="ip" autocomplete="off" placeholder="必填" {{$node->is_dynamic ? 'readonly=readonly' : ''}} required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ipv6" class="col-md-3 control-label"> IPv6地址 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="ipv6" value="{{$node->ipv6}}" id="ipv6" autocomplete="off" placeholder="填则优先展示，级别高于IPv4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="traffic_rate" class="col-md-3 control-label"> 倍率 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="traffic_rate" value="{{$node->traffic_rate}}" id="traffic_rate" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="level" class="col-md-3 control-label">等级</label>
                                                    <div class="col-md-8">
                                                        <select id="level" class="form-control" name="level">
                                                            @foreach(config('common.level_map') as $vk => $vl)
                                                                <option value="{{$vk}}" @if($node->level == $vk) selected @endif>{{$vl}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="speed_limit" class="col-md-3 control-label">限速</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="speed_limit" id="speed_limit">
                                                            @foreach(config('common.speed_limit') as $vk => $vl)
                                                                <option value="{{$vk}}" @if($node->speed_limit == $vk) selected @endif>{{$vl}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="client_limit" class="col-md-3 control-label">设备数限制</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="client_limit" value="{{$node->client_limit}}" id="client_limit" autocomplete="off">
                                                            <span class="input-group-addon">个</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="labels" class="col-md-3 control-label">标签</label>
                                                    <div class="col-md-8">
                                                        <select id="labels" class="form-control select2-multiple" name="labels[]" multiple>
                                                            @foreach($label_list as $label)
                                                                <option value="{{$label->id}}" @if(in_array($label->id, $node->labels)) selected @endif>{{$label->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-md-3 control-label"> 所属分组 </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="group_id" id="group_id">
                                                            <option value="0">请选择</option>
                                                            @if(!$group_list->isEmpty())
                                                                @foreach($group_list as $group)
                                                                    <option value="{{$group->id}}" {{$node->group_id == $group->id ? 'selected' : ''}}>{{$group->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="country_code" class="col-md-3 control-label"> 国家/地区 </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="country_code" id="country_code">
                                                            <option value="">请选择</option>
                                                            @if(!$country_list->isEmpty())
                                                                @foreach($country_list as $country)
                                                                    <option value="{{$country->code}}" {{$node->country_code == $country->code ? 'selected' : ''}}>{{$country->code}} - {{$country->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="col-md-3 control-label"> 描述 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="description" value="{{$node->description}}" id="description" autocomplete="off" placeholder="简单描述">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sort" class="col-md-3 control-label">排序</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="sort" value="{{$node->sort}}" id="sort" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status" class="col-md-3 control-label">状态</label>
                                                    <div class="col-md-8">
                                                        <input type="checkbox" class="make-switch" id="status" {{$node->status ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="正常" data-off-text="维护">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <span class="caption-subject font-dark">扩展信息</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="form-group">
                                                    <label for="is_bt" class="col-md-3 control-label"> 宝塔API </label>
                                                    <div class="col-md-8">
                                                        <input type="checkbox" class="make-switch" id="is_bt" data-on-color="success" {{$node->is_bt ? 'checked' : ''}} data-off-color="danger" data-on-text="启用" data-off-text="关闭">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="bt-port" style="display: none;">
                                                    <label for="bt_port" class="col-md-3 control-label"> 宝塔端口 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="bt_port" value="{{$node->bt_port}}" id="bt_port" autocomplete="off" placeholder="宝塔端口">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="bt-key" style="display: none;">
                                                    <label for="bt_key" class="col-md-3 control-label"> 宝塔API密钥 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="bt_key" value="{{$node->bt_key}}" id="bt_key" autocomplete="off" placeholder="宝塔API密钥">
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label for="is_relay" class="col-md-3 control-label">中转</label>
                                                    <div class="col-md-8">
                                                        <input type="checkbox" class="make-switch" id="is_relay" {{$node->is_relay ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="是" data-off-text="否">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="relay-server" style="display: none;">
                                                    <label for="relay_server" class="col-md-3 control-label"> 中转地址 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="relay_server" value="{{$node->relay_server}}" id="relay_server" placeholder="域名或IP">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="relay-port" style="display: none;">
                                                    <label for="relay_port" class="col-md-3 control-label"> 中转端口 </label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="relay_port" value="{{$node->relay_port}}" id="relay_port" placeholder="中转时必填">
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label for="service" class="col-md-3 control-label">类型</label>
                                                    <div class="col-md-8">
                                                        <div class="mt-radio-inline">
                                                            <label class="mt-radio">
                                                                <input type="radio" name="service" value="1" @if($node->type == 1) checked @endif> VNET
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-radio">
                                                                <input type="radio" name="service" value="2" @if($node->type == 2) checked @endif> V2Ray
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-radio">
                                                                <input type="radio" name="service" value="3" @if($node->type == 3) checked @endif> Trojan
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SSR 设置部分 -->
                                                <div class="ssr-setting {{$node->type == 1 ? '' : 'hidden'}}">
                                                    <div class="form-group">
                                                        <label for="single" class="col-md-3 control-label">单端口</label>
                                                        <div class="col-md-8">
                                                            <input type="checkbox" class="make-switch switch" id="single" {{$node->single ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="启用" data-off-text="关闭">
                                                        </div>
                                                    </div>
                                                    <div class="form-group single-setting {{!$node->single ? 'hidden' : ''}}">
                                                        <label for="port" class="col-md-3 control-label"> 端口 </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="port" id="port" value="{{$node->port}}" placeholder="用户连接端口" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group single-setting {{!$node->single ? 'hidden' : ''}}">
                                                        <label for="passwd" class="col-md-3 control-label"> 密码 </label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="passwd" id="passwd" value="{{$node->passwd}}" placeholder="用户连接密码" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="method" class="col-md-3 control-label">加密方式</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="method" id="method">
                                                                @foreach ($method_list as $method)
                                                                    <option value="{{$method->name}}" @if($method->name == $node->method) selected @endif>{{$method->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="protocol" class="col-md-3 control-label">协议</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="protocol" id="protocol">
                                                                @foreach ($protocol_list as $protocol)
                                                                    <option value="{{$protocol->name}}" @if($protocol->name == $node->protocol) selected @endif>{{$protocol->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="obfs" class="col-md-3 control-label">混淆</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="obfs" id="obfs">
                                                                @foreach ($obfs_list as $obfs)
                                                                    <option value="{{$obfs->name}}" @if($obfs->name == $node->obfs) selected @endif>{{$obfs->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="obfs_param" class="col-md-3 control-label"> 混淆参数 </label>
                                                        <div class="col-md-8">
                                                            <textarea class="form-control" rows="5" name="obfs_param" id="obfs_param" placeholder="混淆不为 [plain] 时可填入参数进行流量伪装；&#13;&#10;混淆为 [http_simple] 时，建议端口为 80；&#13;&#10;混淆为 [tls] 时，建议端口为 443；">{{$node->obfs_param}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="push_port" class="col-md-3 control-label">消息推送端口</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="push_port" value="{{$node->push_port}}" id="push_port">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- V2Ray 设置部分 -->
                                                <div class="v2ray-setting {{$node->type == 2 ? '' : 'hidden'}}">
                                                    <div class="form-group">
                                                        <label for="v2_connect_port" class="col-md-3 control-label">连接端口</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="v2_connect_port" value="{{$node->v2_connect_port}}" id="v2_connect_port" placeholder="443">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_port" class="col-md-3 control-label">服务端口</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="v2_port" value="{{$node->v2_port}}" id="v2_port" placeholder="10087">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_method" class="col-md-3 control-label">加密方式</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="v2_method" id="v2_method">
                                                                <option value="auto" @if($node->v2_method == 'auto') selected @endif>auto</option>
                                                                <option value="none" @if($node->v2_method == 'none') selected @endif>none</option>
                                                                <option value="aes-128-cfb" @if($node->v2_method == 'aes-128-cfb') selected @endif>aes-128-cfb</option>
                                                                <option value="aes-128-gcm" @if($node->v2_method == 'aes-128-gcm') selected @endif>aes-128-gcm</option>
                                                                <option value="chacha20-poly1305" @if($node->v2_method == 'chacha20-poly1305') selected @endif>chacha20-poly1305</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_net" class="col-md-3 control-label">传输协议</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="v2_net" id="v2_net">
                                                                <option value="tcp" @if($node->v2_net == 'tcp') selected @endif>TCP</option>
                                                                <option value="ws" @if($node->v2_net == 'ws') selected @endif>WebSocket</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_type" class="col-md-3 control-label">伪装类型</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="v2_type" id="v2_type">
                                                                <option value="none" @if($node->v2_type == 'none') selected @endif>无伪装</option>
                                                                <option value="http" @if($node->v2_type == 'http') selected @endif>HTTP数据流</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_host" class="col-md-3 control-label">伪装域名</label>
                                                        <div class="col-md-8">
                                                            <select name="v2_host" id="v2_host" class="form-control select2">
                                                                <option value="0">无伪装</option>
                                                                @foreach($certificate_list as $certificate)
                                                                    <option value="{{$certificate->id}}" @if($node->v2_host == $certificate->id) selected @endif>{{$certificate->domain}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="help-block"> 打开TLS或者伪装类型为HTTP数据流时必填 </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_path" class="col-md-3 control-label">路径</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="v2_path" value="{{$node->v2_path}}" id="v2_path">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_connect_tls" class="col-md-3 control-label">连接TLS</label>
                                                        <div class="col-md-8">
                                                            <input type="checkbox" class="make-switch" id="v2_connect_tls" name="v2_connect_tls" {{$node->v2_connect_tls ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="打开" data-off-text="关闭">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="v2_tls" class="col-md-3 control-label">服务TLS</label>
                                                        <div class="col-md-8">
                                                            <input type="checkbox" class="make-switch" id="v2_tls" name="v2_tls" {{$node->v2_tls ? 'checked' : ''}} data-on-color="success" data-off-color="danger" data-on-text="启用" data-off-text="禁用">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tls_provider" class="col-md-3 control-label">TLS配置</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="tls_provider" id="tls_provider" value="{{$node->tls_provider}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Trojan 设置部分 -->
                                                <div class="trojan-setting {{$node->type == 3 ? '' : 'hidden'}}">
                                                    <div class="form-group">
                                                        <label for="trojan_port" class="col-md-3 control-label">连接端口</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="trojan_port" value="{{$node->trojan_port}}" id="trojan_port">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn green">提 交</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // 启用动态IP时默认不可编辑IP
        var is_dynamic = Number($('#is_dynamic').bootstrapSwitch('state'));
        if (is_dynamic) {
            $("#ip").val("1.1.1.1").attr("readonly", "readonly");
            $("#server").attr("required", "required");
        }

        // 启用中转时默认显示出中转地址
        var is_relay = Number($('#is_relay').bootstrapSwitch('state'));
        if (is_relay) {
            $("#relay-server, #relay-port").show();
            $("#relay_server, #relay_port").attr("required", "required");
        }

        // 启用宝塔时默认显示出中转地址
        var is_bt = Number($('#is_bt').bootstrapSwitch('state'));
        if (is_bt) {
            $("#bt-port, #bt-key").show();
            $("#bt_port, #bt_key").attr("required", "required");
        }

        // 标签选择器
        $('#labels').select2({
            theme: 'bootstrap',
            placeholder: '支持的流媒体',
            allowClear: true,
            width:'100%'
        });

        // V2Ray伪装域名选择器
        $('#v2_host').select2({
            theme: 'bootstrap',
            placeholder: '请先到【证书列表】添加域名及其证书',
            allowClear: true,
            width:'100%'
        });

        // ajax同步提交
        function do_submit() {
            var _token = '{{csrf_token()}}';
            var id = '{{Request::get('id')}}';
            var name = $('#name').val();
            var labels = $("#labels").val();
            var group_id = $("#group_id option:selected").val();
            var country_code = $("#country_code option:selected").val();
            var server = $('#server').val();
            var ip = $('#ip').val();
            var ipv6 = $('#ipv6').val();
            var is_relay = Number($('#is_relay').bootstrapSwitch('state'));
            var relay_server = $('#relay_server').val();
            var relay_port = $('#relay_port').val();
            var description = $('#description').val();
            var method = $('#method').val();
            var traffic_rate = $('#traffic_rate').val();
            var level = $("#level option:selected").val();
            var speed_limit = $("#speed_limit option:selected").val();
            var client_limit = $('#client_limit').val();
            var protocol = $('#protocol').val();
            var obfs = $('#obfs').val();
            var obfs_param = $('#obfs_param').val();
            var is_subscribe = Number($('#is_subscribe').bootstrapSwitch('state'));
            var is_dynamic = Number($('#is_dynamic').bootstrapSwitch('state'));
            var is_bt = Number($('#is_bt').bootstrapSwitch('state'));
            var bt_port = $('#bt_port').val();
            var bt_key = $('#bt_key').val();
            var single = Number($('#single').bootstrapSwitch('state'));
            var port = $("#port").val();
            var passwd = $("#passwd").val();
            var push_port = $("#push_port").val();
            var sort = $('#sort').val();
            var status = Number($('#status').bootstrapSwitch('state'));
            var is_tcp_check = Number($('#is_tcp_check').bootstrapSwitch('state'));
            var is_udp = Number($('#is_udp').bootstrapSwitch('state'));

            var service = $("input:radio[name='service']:checked").val();
            var v2_connect_port = $('#v2_connect_port').val();
            var v2_port = $('#v2_port').val();
            var v2_method = $("#v2_method option:selected").val();
            var v2_net = $('#v2_net').val();
            var v2_type = $('#v2_type').val();
            var v2_host = $('#v2_host').val();
            var v2_path = $('#v2_path').val();
            var v2_connect_tls = Number($('#v2_connect_tls').bootstrapSwitch('state'));
            var v2_tls = Number($('#v2_tls').bootstrapSwitch('state'));
            var tls_provider = $('#tls_provider').val();
            var trojan_port = $('#trojan_port').val();

            // Trojan节点必须填写节点域名
            if (service == 3) {
                if (server == undefined || server == '') {
                    layer.alert("节点为Trojan时，必须填写节点域名", {icon:2, title:'错误'});
                    $("#server").focus();
                    return false;
                }
            }

            $.ajax({
                type: "POST",
                url: "/admin/editNode",
                async: false,
                data: {
                    _token:_token,
                    id: id,
                    name: name,
                    labels: labels,
                    group_id: group_id,
                    country_code: country_code,
                    server: server,
                    ip: ip,
                    ipv6: ipv6,
                    is_relay: is_relay,
                    relay_server: relay_server,
                    relay_port: relay_port,
                    description: description,
                    method: method,
                    traffic_rate: traffic_rate,
                    level: level,
                    speed_limit: speed_limit,
                    client_limit: client_limit,
                    protocol: protocol,
                    obfs: obfs,
                    obfs_param: obfs_param,
                    is_subscribe: is_subscribe,
                    is_dynamic: is_dynamic,
                    is_bt: is_bt,
                    bt_port: bt_port,
                    bt_key: bt_key,
                    single: single,
                    port: port,
                    passwd: passwd,
                    push_port: push_port,
                    sort: sort,
                    status: status,
                    is_tcp_check: is_tcp_check,
                    is_udp: is_udp,
                    type: service,
                    v2_connect_port: v2_connect_port,
                    v2_port: v2_port,
                    v2_method: v2_method,
                    v2_net: v2_net,
                    v2_type: v2_type,
                    v2_host: v2_host,
                    v2_path: v2_path,
                    v2_connect_tls: v2_connect_tls,
                    v2_tls: v2_tls,
                    tls_provider: tls_provider,
                    trojan_port: trojan_port,
                },
                dataType: 'json',
                success: function (ret) {
                    layer.msg(ret.message, {time:1000}, function() {
                        if (ret.status == 'success') {
                            window.location.href = '/admin/nodeList?page={{Request::get('page', 1)}}';
                        }
                    });
                }
            });

            return false;
        }

        // 设置单端口多用户
        $('#single').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var single = state ? 1 : 0;

                if (single) {
                    $(".single-setting").removeClass('hidden');
                    $("#port, #passwd").attr("required", "required");
                } else {
                    $(".single-setting").removeClass('hidden');
                    $(".single-setting").addClass('hidden');
                    $("#port, #passwd").removeAttr("required");
                }
            }
        });

        // 设置服务类型
        $("input:radio[name='service']").on('change', function() {
            var service = parseInt($(this).val());

            if (service === 1) {
                $(".ssr-setting").removeClass('hidden');
                $(".v2ray-setting").addClass('hidden');
                $(".trojan-setting").addClass('hidden');
            } else if(service === 2) {
                $(".ssr-setting").addClass('hidden');
                $(".v2ray-setting").removeClass('hidden');
                $(".trojan-setting").addClass('hidden');
            } else {
                $(".ssr-setting").addClass('hidden');
                $(".v2ray-setting").addClass('hidden');
                $(".trojan-setting").removeClass('hidden');
            }
        });

        // 设置是否为动态IP
        $('#is_dynamic').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_dynamic = state ? 1 : 0;

                if (is_dynamic) {
                    $("#ip").val("1.1.1.1").attr("readonly", "readonly");
                    $("#server").attr("required", "required");
                } else {
                    $("#ip").val("").removeAttr("readonly");
                    $("#server").removeAttr("required");
                }
            }
        });

        // 设置宝塔
        $('#is_bt').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_bt = state ? 1 : 0;

                if (is_bt) {
                    $("#bt-port, #bt-key").show();
                    $("#bt_port, #bt_key").attr("required", "required");
                } else {
                    $("#bt-port, #bt-key").hide();
                    $("#bt_port, #bt_key").removeAttr("required");
                }
            }
        });

        // 设置中转
        $('#is_relay').on({
            'switchChange.bootstrapSwitch': function (event, state) {
                var is_relay = state ? 1 : 0;

                if (is_relay) {
                    $("#relay-server, #relay-port").show();
                    $("#relay_server, #relay_port").attr("required", "required");
                } else {
                    $("#relay-server, #relay-port").hide();
                    $("#relay_server, #relay_port").removeAttr("required");
                }
            }
        });

        // 服务条款
        function showTnc() {
            var content = '1.请勿直接复制黏贴以下配置，SSR(R)会报错的；'
                + '<br>2.确保服务器时间为CST；'
                + '<br>3.具体请看<a href="https://github.com/ssrpanel/SSRPanel/wiki/%E5%8D%95%E7%AB%AF%E5%8F%A3%E5%A4%9A%E7%94%A8%E6%88%B7%E7%9A%84%E5%9D%91" target="_blank">WIKI</a>；'
                + '<br>'
                + '<br>"additional_ports" : {'
                + '<br>&ensp;&ensp;&ensp;&ensp;"80": {'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"passwd": "password",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"method": "aes-128-ctr",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"protocol": "auth_aes128_md5",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"protocol_param": "#",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"obfs": "tls1.2_ticket_auth",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"obfs_param": ""'
                + '<br>&ensp;&ensp;&ensp;&ensp;},'
                + '<br>&ensp;&ensp;&ensp;&ensp;"443": {'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"passwd": "password",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"method": "aes-128-ctr",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"protocol": "auth_aes128_sha1",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"protocol_param": "#",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"obfs": "tls1.2_ticket_auth",'
                + '<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;"obfs_param": ""'
                + '<br>&ensp;&ensp;&ensp;&ensp;}'
                + '<br>},';

            layer.open({
                type: 1
                ,title: '[节点 user-config.json 配置示例]' //不显示标题栏
                ,closeBtn: false
                ,area: '400px;'
                ,shade: 0.8
                ,id: 'tnc' //设定一个id，防止重复弹出
                ,resize: false
                ,btn: ['确定']
                ,btnAlign: 'c'
                ,moveType: 1 //拖拽模式，0或者1
                ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">' + content + '</div>'
                ,success: function(layero){
                    //
                }
            });
        }

        // 模式提示
        function showPortsOnlyConfig() {
            var content = '严格模式：'
                + '<br>'
                + '"additional_ports_only": "true"'
                + '<br><br>'
                + '兼容模式：'
                + '<br>'
                + '"additional_ports_only": "false"';

            layer.open({
                type: 1
                ,title: '[节点 user-config.json 配置示例]'
                ,closeBtn: false
                ,area: '400px;'
                ,shade: 0.8
                ,id: 'po-cfg' //设定一个id，防止重复弹出
                ,resize: false
                ,btn: ['确定']
                ,btnAlign: 'c'
                ,moveType: 1 //拖拽模式，0或者1
                ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">' + content + '</div>'
                ,success: function(layero){
                    //
                }
            });
        }
    </script>
@endsection
