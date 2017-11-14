# Random string generator
Generate random string for any purpose.

## Behavior
You can generate a string using characters, numbers and special characters.

```php
$generator = new StringGenerator();
$generator->generateStrings()->getStrings();
```

By default, it generates 10 strings with length of 10. The output will be:
```
o2VgeOVDMu
l_d8~_99i9
Fy&plE6mU0
x92iph*bUK
F6JSeDSoN1
xiztHV-O7T
OF#RYi-VtT
v-Z5R3JArm
BZF1jdWh@~
1Gz$nnbm8E
```

## Setup
If you want to specify which type of chars to use, you can do it in the constructor.

```php
public function __construct($numbers = true, $lowerChars = true, $upperChars = true, $specialChars = true)
```

For example, to generate just letters, you can specify it like this:

```php
$generator = new StringGenerator(false, true, true, false);
$generator->generateStrings()->getStrings();
```

The outpull will be:
```
zlfdhkMJqA
jwuyJaEfsi
HmKjesSirF
XQQcUYmGIC
hSZCqICVOV
dvhNFlgxux
dsoUuiSHPB
kXtkzJScFG
YIcgwHrCfM
aieodzxVhn
```

And if you want longer string or a bigger list, you can set it in the `generateString()` function:

```php
public function generateStrings($length = 10, $number = 10)
```

So if you want 30 chars long strings and list of 5 strings, just call the function like this:

```php
$generator = new StringGenerator();
$generator->generateStrings(30, 5)->getStrings();
```

The output will be like this:

```
2n90d~OB6HWDdgkmGaCh+^VLtCsjN4
jPstQFou7u2$-g9iCQt5-j0U^umnO0
s-QUrwqP+xa$r89BrMhURg3S0-dmm@
mPZ2zhzZ*pn7jOgsfH4xsWNwFOvT0R
KnwAq&SZWPf9WyY3+3K^B3Sfzn$~7~
```
