# genesis分支说明

参照[genesis](https://github.com/thedevdojo/genesis)开发

## 技术栈
- [Tailwindcss](https://tailwindcss.com/)
- [AlpineJS](https://alpinejs.dev/)
- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com/)
- [Folio](https://github.com/laravel/folio)
- [Volt](https://github.com/livewire/volt)

## 初始化laravel
```
composer create-project laravel/laravel dc-motorcycle
```

## 依赖包
- [codeat3/blade-phosphor-icons](https://github.com/codeat3/blade-phosphor-icons)： icons
- [laravel/folio](https://laravel.com/docs/11.x/folio)： 路由
- [laravel/ui](https://github.com/laravel/ui)：自定义UI风格
- [livewire/livewire](https://github.com/livewire/livewire/): [文档](https://livewire.laravel.com/docs/quickstart)
- [livewire/volt](https://github.com/livewire/volt): [文档](https://livewire.laravel.com/docs/volt) 

### 安装codeat3/blade-phosphor-icons
```
codeat3/blade-phosphor-icons
```

### Tailwind安装

```shell
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

修改tailwind.config.js

```js
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

修改resources/css/app.css

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```
执行

```shell
npm run dev
```

在blade.php中引入。放置在head里
```php
@vite('resources/css/app.css')
```

### Folio安装及路由规划
安装依赖
```shell
composer require laravel/folio
php artisan folio:install
```
确认public/.htaccess 里有相关的代码

去掉routes/web.php里的默认首页路由。

### 安装liveware及volt
```shell
composer require livewire/livewire
composer require livewire/volt
php artisan volt:install
```

### 安装phpunit
```shell
composer require -D phpunit/phpunit
```
