## 说明
[davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs) 是为 Laravel 定制的具有 Bootstrap 风格的面包屑导航

> 本项目由 [The EST Group](http://est-group.org/) 团队整理发布, 首发地为 [PHPHub 社区](https://phphub.org/), 关于 PHPHub 社区往期的开源作品可 [在此](https://phphub.org/topics/1531) 查看.

## 安装
本项目使用 [Laravel](https://laravel.com/docs/5.2) ( [中文文档见此](http://laravel-china.org/docs/5.0) ), 本地开发环境使用 [Homestead](http://laravel-china.org/docs/5.0/homestead) 进行快速部署.

下文将在默认读者已经安装好 `Homestead` 情况下进行说明.

### 1. 克隆代码
    git clone https://github.com/CycloneAxe/est-breadcrumbs-demo.git

### 2. 配置本地的 homestead 环境

编辑文件:

    homestead edit

对应加入修改:

    folders:
        - map: /Users/.../est-breadcrumbs-demo {你的本地项目地址}
          to: /home/vagrant/est-breadcrumbs-demo

    sites:
        - map: breadcrumbs.app
          to: /home/vagrant/est-breadcrumbs-demo/public

应用修改:

    homestead provision

### 3. 安装依赖

    composer install

### 4. 生成配置文件

复制 `.env.example` 为 `.env`


### 5. 修改 hosts

    sudo echo '192.168.10.10 breadcrumbs.app' >> /etc/hosts

配置完以后浏览器直接访问 http://breadcrumbs.app 即可
