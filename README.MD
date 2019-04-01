# 安装

- 执行安装
 
`composer require sentiger/region`
- 后期更新

`composer update sentiger/region`

- 安装项目数据库

`php artisan yiche:region-install`

# 使用
- 默认安装好之后会有个默认路由`http://xxx/yiche/region/all`，返回一个结构层的json

```json
[
    {
        "id": 1,
        "name": "北京市",
        "code": "110000",
        "parent_code": "",
        "level": 1,
        "children": [
            {
                "id": 2,
                "name": "市辖区",
                "code": "110100",
                "parent_code": "110000",
                "level": 2,
                "children": [
                    {
                        "id": 3,
                        "name": "东城区",
                        "code": "110101",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    }                 
                ]
            }
        ]
    },
    ......
```
- 如果这个结构不满足实际业务返回的数据格式，可以通过接口来自定义,这里是返回所有的数据！

```
Route::get('/', function (\Yiche\Region\Region $region){
   return app('ycRegion')->getAll();
});
```

```json
[
    {
        "id": 1,
        "name": "北京市",
        "code": "110000",
        "parent_code": "",
        "level": 1
    },
    {
        "id": 2,
        "name": "市辖区",
        "code": "110100",
        "parent_code": "110000",
        "level": 2
    },
    ...
```