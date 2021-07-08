
<h1><p align="center">TP-Hash</p></h1>
<p align="center"> thinkphp6的hash加密功能</p>

## 环境要求

1. php >= 7.4
2. thinkphp ^6.0.0

## 说明
> 目前支持的密方式：bcrypt(默认)

## 安装

第一步:

由于此包存储位置在内网gitlab上,需要在项目根目录下的composer.json文件中添加:
```shell
"repositories": {
    "lijinhua/tp-hash": {
        "type": "vcs",
        "url": "git@172.20.67.5:packages/tp-hash.git"
    }
}
```

```shell
$ composer require lijinhua/tp-hash
```

第二步:

```shell
$ php think hash:config
```
此举将生成配置文件(hashing.php])。


## 使用方式


示例：

```php
use lijinhua\hash\facade\Hash;

$password = 'admin123';
// 密码加密
$passwordHash =  Hash::create($password);
// dump($passwordHash);

// 密码验证
if (Hash::check($password,$passwordHash)) {
    echo 'true';
}else{
    echo 'false';
}
```
