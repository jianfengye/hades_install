## Hades PHP Framework Install Project

Hades是一款容易上手的PHP框架，它在很大程度上借鉴了laravel框架，但是对于laravel中很多部分进行重新思考和构思。

所以如果你使用过laravel框架，你会非常容易上手这个框架。

本项目为Hades框架的安装项目

## 安装

    composer install hades

## 目录路径

    +--+
       |
       +- app/                      控制台程序
       +- config/                   配置文件
       +- public/                   可访问目录
       +- storage/                  临时文件，日志，session等
       +- tests/                    测试用例
       +- views/                    模版路径
       +- vendor/                   第三方插件

## nginx配置

参考：

    server {
            listen       80;
            server_name hades.cn;
            access_log /tmp/hades.cn.access.log logstash;
            error_log /tmp/hades.error.log notice;

            root /mnt/www/hades/public/;
            index index.php;

            location ~ \.php$ {
                fastcgi_pass 127.0.0.1:9000;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
            }

            location / {
                if (!-e $request_filename){
                    rewrite ^/(.*) /index.php last;
                }
            }
    }

### License

The Hades framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
