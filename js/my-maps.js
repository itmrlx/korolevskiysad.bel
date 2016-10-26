// yandex
ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [54.5312,28.0310],
            zoom: 8
        }, {
            searchControlProvider: 'yandex#search'
        });

    myMap.geoObjects
        .add(new ymaps.Placemark([54.0639,27.7620], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.0605,27.7686], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9222,27.3870], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9318,25.7700], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([55.3615,27.4719], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.6781,23.8298], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9382,27.0914], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9671,27.0569], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([52.0895,23.7120], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.6821,27.1386], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.7441,27.3238], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.8244,27.5323], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.7938,27.4559], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.7824,27.4297], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.6793,27.5308], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.8673,27.3174], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.8181,27.3946], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.8946,30.3310], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.8860,28.6941], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.0362,24.0942], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.2007,27.8479], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([55.6433,27.0340], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.9092,26.7068], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([55.0431,26.3093], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.1592,27.2356], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.0049,27.2918], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([52.2878,29.7737], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([54.8706,26.9303], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9692,27.5870], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9507,27.7870], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9578,27.5404], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9400,27.4969], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9086,27.3016], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
        .add(new ymaps.Placemark([53.9407,27.3471], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Наш объект'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.gif',
            iconImageSize: [35, 38],
            iconImageOffset: [-3, -69]
        }))
}