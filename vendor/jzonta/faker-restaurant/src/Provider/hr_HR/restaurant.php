<?php

namespace FakerRestaurant\Provider\hr_HR;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Pizza s sirom', 'Hamburger', 'Hamburger s sirom', 'Hamburger sa šunkom', 'Hamburger sa šunkom i sirom',
        'Mali hamburger', 'Mali hamburger s sirom', 'Mali hamburger sa šunkom', 'Mali hamburger sa šunkom i sirom',
        'Vegetarijanski sendvič', 'Sendvič s sirom i povrćem', 'Pohani sir',
        'Sendvič s kobasicom', 'Sendvič sa šunkom', 'Sendvič sa šunkom i sirom', 'Tjestenina'
    ];

    protected static $beverageNames = [
        'Pivo', 'Bud Light', 'Budweiser', 'Miller Lite',
        'Mliječni shake', 'Čaj', 'Slatki čaj', 'Kava', 'Topli čaj',
        'Šampanjac', 'Vino', 'Limunada', 'Koka-kola', 'Dijetna koka-kola',
        'Voda', 'Sprite', 'Narančin sok', 'Ledena kava'
    ];

    protected static $dairyNames = [
        'Maslac',
        'Jaje',
        'Sir',
        'Kiselo vrhnje',
        'Mozzarella',
        'Jogurt',
        'Vrhnje',
        'Mlijeko',
        'Krema'
    ];

    protected static $vegetableNames = [
        'Luk',
        'Češnjak',
        'Rajčica',
        'Krumpir',
        'Mrkva',
        'Paprika',
        'Bazilika',
        'Peršin',
        'Brokula',
        'Kukuruz',
        'Špinat',
        'Đumbir',
        'Chili',
        'Celer',
        'Ružmarin',
        'Krastavac',
        'Kiseli krastavac',
        'Avokado',
        'Bundeva',
        'Menta',
        'Patlidžan',
        'Slanutak',
    ];

    protected static $fruitNames = [
        'Limun',
        'Jabuka',
        'Banana',
        'Ljubičasta limeta',
        'Jagoda',
        'Naranča',
        'Ananas',
        'Borovnica',
        'Grožđica',
        'Kokos',
        'Grožđe',
        'Breskva',
        'Malina',
        'Brusnica',
        'Mango',
        'Kruška',
        'Kupina',
        'Trešnja',
        'Lubenica',
        'Kiwi',
        'Papaja',
        'Guava',
        'Lichee',
    ];

    protected static $meatNames = [
        'Piletina',
        'Bacon',
        'Kobasica',
        'Govedina',
        'Šunka',
        'Vruća kobasica',
        'Svinjetina',
        'Puretina',
        'Pileće krilce',
        'Pileća prsa',
        'Janjetina',
    ];

    protected static $sauceNames = [
        'Umak od rajčice',
        'Rajčica u tubi',
        'Umak od majoneze',
        'BBQ umak',
        'Chili umak',
        'Umak od češnjaka',
    ];

    /**
     * Nasumično ime hrane.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * Nasumično ime pića.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }

    /**
     * Nasumično ime mliječnih proizvoda.
     * @return string
     */
    public function dairyName()
    {
        return static::randomElement(static::$dairyNames);
    }

    /**
     * Nasumično ime povrća.
     * @return string
     */
    public function vegetableName()
    {
        return static::randomElement(static::$vegetableNames);
    }

    /**
     * Nasumično ime voća.
     * @return string
     */
    public function fruitName()
    {
        return static::randomElement(static::$fruitNames);
    }

    /**
     * Nasumično ime mesa.
     * @return string
     */
    public function meatName()
    {
        return static::randomElement(static::$meatNames);
    }

    /**
     * Nasumično ime umaka.
     * @return string
     */
    public function sauceName()
    {
        return static::randomElement(static::$sauceNames);
    }
}
