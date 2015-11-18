---
title: Contracts Change Log

---

## Version 3.1 {#v3-1}

### v3.1.13 {#v3-1-13}

* Move Contracts component out of Kernel component.

### v3.1.12 {#v3-1-12}

* Update `Orchestra\Contracts\Html\Form\Grid` docblocks.
* Update `Orchestra\Contracts\Html\Table\Grid` docblocks.

### v3.1.11 {#v3-1-11}

* Add `Orchestra\Contracts\Http\RouteManager::whenOn()` to contract.

### v3.1.9 {#v3-1-9}

* Add `Orchestra\Contracts\Authorization\Authorizable`.

### v3.1.8 {#v3-1-8}

* Update `Orchestra\Contracts\Auth\Command\ThrottlesLogins` contracts schema to fit with the latest code.

### v3.1.7 {#v3-1-7}

* Fixes Table Grid contract params differ from actual Table Grid method.

### v3.1.6 {#v3-1-6}

* Remove `Orchestra\Contracts\Extension\SafeMode` and replace with `Orchestra\Contracts\Extension\StatusChecker`.

### v3.1.5 {#v3-1-5}

* Add `Orchestra\Contracts\Auth\Command\DeauthenticateUser`.
* Add `Orchestra\Contracts\Auth\Command\ThrottlesLogins`.
* Add `Orchestra\Contracts\Auth\Listener\DeauthenticateUser`.
* Add `Orchestra\Contracts\Auth\Listener\ThrottlesLogins`.

### v3.1.2 {#v3-1-2}

* Improved performances by reducing call within `Illuminate\Container\Container`.

### v3.1.0 {#v3-1-0}

* Update support to Laravel Framework v5.1.
* Update `Orchestra\Contracts\Memory\Provider` contract.
* Add `Orchestra\Contracts\Publisher\Publisher` contract.
* Add `Orchestra\Contracts\Publisher\Uploader` contract.
* Add `Orchestra\Contracts\Publisher\ServerException` exception.
