# yii2-owlcarousel

OwlCarousel widget for Yii framework.

This widget depends on OwlCarousel script: https://owlcarousel2.github.io/OwlCarousel2

## Install

``composer require --prefer-dist ereminmdev/yii2-owlcarousel``

## Documentation

https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html

## Tips

For the same item heights use:

```
.owl-stage {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
}
```

To work properly inside a CSS Grid cell, set `min-width: 100%` to the parent element.
