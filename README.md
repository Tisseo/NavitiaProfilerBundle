README
======

What is NavitiaProfilerBundle ?
-----------------------------

New debug toolbar in profiler for navitia.


Requirements
-------------

__Coming Soon__

Installation
-------------

1. Open your composer.json in your project
2. Add require "canaltp/navitia-profiler-bundle": "dev-master"
2. Add require "canaltp/navitia": "dev-master"
3. Add this line in your AppKernel => "new CanalTP\NavitiaProfilerBundle\NavitiaProfilerBundle()"
4. Enable Navitia profiler by adding this line in service.yml of your app
        -> arguments: ['@navitia_profiler']


    // service.yml
    navitia_component:
        class:          "%navitia_component.class%"
        factory_class:  "%navitia_component.class%"
        factory_method: getInstance
        arguments: ['@navitia_profiler']
        calls:
            - [ setConfiguration, [%config.navitia%]]

    // composer.json
    {
        ...
        "require": {
            ...
            "canaltp/navitia-profiler-bundle": "dev-master"
            "canaltp/navitia": "dev-master"
        },
        "repositories": [
            {
                "type": "composer",
                "url": "http://packagist.canaltp.fr"
            },
            ...
        ],
        ...
    }

Running NavitiaProfilerBundle Tests
---------------------------

__Coming Soon__

Contributing
-------------

1. Rémy Abi-Khalil - remy.abikhalil@canaltp.fr
