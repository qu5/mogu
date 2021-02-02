# 蘑菇导航
蘑菇导航是根据[SimpleWebNavigation](https://github.com/KrunkZhou/SimpleWebNavigation)修改而来的一个php网址导航。支持php8，支持左侧锚点，支持自定义fontawesome图标。
可以作为Telegram群组导航、图床导航、vps导航等垂直导航。演示：https://mogu.fun
## 演示
pc样式

![演示](https://mogu.fun/img/pc.png)
手机样式

![演示](https://mogu.fun/img/phone.png)

## 使用方法
### 安装
下载后上传到php空间。
### 修改标题、简介
编辑`index.php`

### 链接编辑 `links.txt`

格式：
```
box
分类名称
fontawesome名称
链接名
链接地址
链接名
链接地址
.....
.....
endbox
```
### 左侧导航栏编辑`nav.txt` 
```
链接名称
链接地址
```

支持添加`#`锚点链接
```
学习探索
#学习探索
```

### 卡片分类图标

分类图片采用[fontawesome](https://fontawesome.com)，复制`<i class="fas fa-music"></i>`中的`fas fa-music`到links.txt。


反馈交流：[VPS讨论群](https://t.me/vpsqun)
