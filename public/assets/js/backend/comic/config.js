define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'comic/config/index',
                    add_url: 'comic/config/add',
                    edit_url: 'comic/config/edit',
                    del_url: 'comic/config/del',
                    multi_url: 'comic/config/multi',
                    table: 'comic_config',
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
                        {field: 'name', title: __('Name')},
                        {field: 'title', title: __('Title')},
                        {field: 'intro', title: __('Intro'),visible:false},
                        {field: 'image', title: __('Image'), formatter: Table.api.formatter.image},
                        {field: 'state', title: __('State'), searchList: {"update":__('state update'),"finished":__('state finished')}},
                        {field: 'seo_title', title: __('Seo_title')},
                        {field: 'seo_keywords', title: __('Seo_keywords')},
                        {field: 'seo_description', title: __('Seo_description')},
                        {field: 'main_subject', title: __('Main_subject')},
                        {field: 'sub_subject', title: __('Sub_subject')},
                        {field: 'views', title: __('Views')},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"1":__('Status 1'),"0":__('Status 0')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'artist', title: __('Artist')},
                        {field: 'classification.name', title: __('Classification.name')},
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