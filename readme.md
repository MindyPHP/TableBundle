# Mindy

Mindy - это framework основанный на Symfony. Мы не используем компоненты из симфони: Twig, Doctrine. Вместо них используется `Mindy/Template` и `Mindy/Orm`.

**Если вы ищите старую версию фреймворка, то смотрите репозиторий MindyLegacy.**

## Разворачивание нового проекта

```bash
$ cd projects
$ composer create-project mindy/project my_new_project
$ # Start
$ php web/app_dev.php server:run 0.0.0.0:8000 -vvv
```

## Помощь проекту

Мы рады любому содействию проекту. Если вы нашли ошибку или у вас есть предложение, пожалуйста [сообщите о нем в issue](https://github.com/MindyPHP/Mindy/issues/new)

---

**Mindy legacy**: Оригинальный репозиторий перенесен в https://github.com/MindyPHP/MindyLegacy