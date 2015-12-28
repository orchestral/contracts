---
title: Contracts Change Log

---

## Version 3.3 {#v3-3}

### v3.3.0@dev {#v3-3-0}

* Update support to Laravel Framework v5.3.

## Version 3.2 {#v3-2}

### v3.2.1 {#v3-2-1}

* Remove extending `Illuminate\Contracts\Support\Renderable` from `Orchestra\Contracts\Html\Builder` contracts to allow form and table builder implementation to be accessed from within views.

### v3.2.0 {#v3-2-0}

* Update support to Laravel Framework v5.2.
* Update contracts compatibility with Orchestra Platform v3.2.
* Add `Orchestra\Contracts\Foundation\Application` contract.
* Remove `Orchestra\Contracts\Foundation\ DeferrableServiceContainer` contract.
* Remove `Orchestra\Contracts\Routing\FilterableController` contract.

## Version 3.1 {#v3-1}

### v3.1.14 {#v3-1-14}

* Remove extending `Illuminate\Contracts\Support\Renderable` from `Orchestra\Contracts\Html\Builder` contracts to allow form and table builder implementation to be accessed from within views.

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
