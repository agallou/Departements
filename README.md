Tableau des départements français
=================================

Utilisation
-----------

Récupération d'un libellé :

```php
$departements = new \agallou\Departements\Collection();
var_dump($departements->getLabel('29'));
//string(10) "Finistère"
```

Récupération tableau complet : 

```php
$departements = new \agallou\Departements\Collection();
var_dump($departements->getAll());
```

Récupération d'un libellé si le paramète n'est pas paddé avec un zéro :

```php
$departements = new \agallou\Departements\Collection();
var_dump($departements->getLabel(1, true));
//string(3) "Ain"
```

La collection implémente ArrayIterator, il est donc possible de boucler dessus : 

```php
$departements = new \agallou\Departements\Collection();
foreach ($departements as $code => $label) {
  var_dump($code, $label);
}
//string(2) "01"
//string(3) "Ain"
//string(2) "02"
//string(5) "Aisne"
//...
//string(7) "Mayotte"
```


Il est aussi possibler d'accéder aux libellés comme ceci : 

```
$departements = new \agallou\Departements\Collection();
var_dump($departements['69']);
//string(6) "Rhône"
```

