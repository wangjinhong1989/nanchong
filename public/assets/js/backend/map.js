define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'map/index' + location.search,
                    add_url: 'map/add',
                    edit_url: 'map/edit',
                    del_url: 'map/del',
                    multi_url: 'map/multi',
                    table: 'map',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'title', title: __('Title')},
                        {field: 'jingdu', title: __('Jingdu'), operate:'BETWEEN'},
                        {field: 'weidu', title: __('Weidu'), operate:'BETWEEN'},
                        {field: 'url', title: __('Url'), formatter: Table.api.formatter.url},
                        {field: 'image', title: __('Image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'description', title: __('Description')},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'area', title: __('Area'), searchList: {"顺庆区":__('顺庆区'),"高坪区":__('高坪区'),"嘉陵区":__('嘉陵区'),"南部县":__('南部县'),"蓬安县":__('蓬安县'),"营山县":__('营山县'),"仪陇县":__('仪陇县'),"阆中市":__('阆中市'),"西充县":__('西充县')}, formatter: Table.api.formatter.normal},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});