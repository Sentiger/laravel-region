# 安装
- 在项目`composer.json`中添加
```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://code.lrwanche.com/yiche/region"
        }
    ]
```
- 执行安装
 
`composer require yiche/region:dev-master`
- 后期更新

`composer update yiche/region`

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
                    },
                    {
                        "id": 4,
                        "name": "西城区",
                        "code": "110102",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 5,
                        "name": "朝阳区",
                        "code": "110105",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 6,
                        "name": "丰台区",
                        "code": "110106",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 7,
                        "name": "石景山区",
                        "code": "110107",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 8,
                        "name": "海淀区",
                        "code": "110108",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 9,
                        "name": "门头沟区",
                        "code": "110109",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 10,
                        "name": "房山区",
                        "code": "110111",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 11,
                        "name": "通州区",
                        "code": "110112",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 12,
                        "name": "顺义区",
                        "code": "110113",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 13,
                        "name": "昌平区",
                        "code": "110114",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 14,
                        "name": "大兴区",
                        "code": "110115",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 15,
                        "name": "怀柔区",
                        "code": "110116",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 16,
                        "name": "平谷区",
                        "code": "110117",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 17,
                        "name": "密云区",
                        "code": "110118",
                        "parent_code": "110100",
                        "level": 3,
                        "children": []
                    },
                    {
                        "id": 18,
                        "name": "延庆区",
                        "code": "110119",
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

```php

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