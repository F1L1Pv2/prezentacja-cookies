---
marp: true
# theme: uncover
# paginate: true
theme: uncover
# class: invert
---

### Ciasteczka (cookies) - Przykład wykorzystania w PHP

Filip Młodzik 2Pr

---

## I. Wprowadzenie

---

### A. Definicja ciasteczek

- Ciasteczka, znane również jako cookies, są niewielkimi plikami tekstowymi przechowywanymi na komputerze klienta podczas interakcji z serwerem.
- Służą do przechowywania informacji o sesji, preferencjach użytkownika lub innych danych potrzebnych do poprawnego funkcjonowania witryny internetowej.

---

### B. Znaczenie ciasteczek w interakcji klient-serwer

- Ciasteczka odgrywają kluczową rolę w interakcji między klientem (przeglądarką internetową) a serwerem.
- Umożliwiają identyfikację użytkownika i dostarczenie spersonalizowanych treści.
- Wysyłane i odbierane są podczas żądań HTTP między klientem a serwerem.

---
### C. Przykłady zastosowań ciasteczek

1. Zapamiętywanie sesji
2. Personalizacja witryny
3. Koszyk zakupowy
4. Analiza użytkowników

---

## II. Wykorzystanie ciasteczek w PHP
---
### A. Tworzenie ciasteczek w PHP

- Użycie funkcji `setcookie()`
```php
// Utworzenie ciasteczka z nazwą "preferencje" i wartością "ciemny_motyw"
setcookie('preferencje', 'ciemny_motyw', time() + 3600, '/');

// Utworzenie ciasteczka z nazwą "ostatnia_wizyta" i wartością aktualnej daty i czasu
setcookie('ostatnia_wizyta', date('Y-m-d H:i:s'), time() + 3600, '/');
```
- Parametry funkcji `setcookie()`: nazwa, wartość, czas wygaśnięcia, ścieżka, domena, flagi
---
### B. Odczytywanie ciasteczek w PHP

- Użycie superglobalnej tablicy `$_COOKIE`

```php
// Sprawdzenie czy istnieje ciasteczko o nazwie "username"
if (isset($_COOKIE['username'])) {
    //zdobycie wartosci z ciasteczka "username"
    $wartosc = $_COOKIE['username'];
    //przywitanie urzytkownika
    echo "Witaj, ".$wartosc,"!";
} else {
    //przywitanie goscia w przypadku gdy
    //ciasteczko "username" nie zostało znalezione
    echo "Witaj, gościu!";
}


```



---
### C. Modyfikowanie ciasteczek w PHP

---

1. Przechowywanie informacji o sesji:
```php
// Tworzenie ciasteczka z identyfikatorem sesji
$sessionID = generujUnikalnyID(); // generowanie unikalnego identyfikatora sesji
setcookie('sessionID', $sessionID, time() + 3600, '/');

// Odczytywanie ciasteczka z identyfikatorem sesji
$sessionID = $_COOKIE['sessionID'];
```

---

2. Personalizacja witryny dla użytkowników:

```php
// Tworzenie ciasteczka z preferencją językową
$language = 'pl'; // przykładowa wartość preferowanego języka
setcookie('language', $language, time() + 3600, '/');

// Odczytywanie ciasteczka z preferencją językową
$language = $_COOKIE['language'];
```
---

3.Wykorzystanie w koszyku zakupowym:
```php
// Tworzenie ciasteczka z zawartością koszyka zakupowego
$cartItems = ['product1', 'product2', 'product3']; // przykładowa zawartość koszyka
setcookie('cartItems', serialize($cartItems), time() + 3600, '/');

// Odczytywanie ciasteczka z zawartością koszyka zakupowego
$cart

```

---

## IV. Podsumowanie

### A. Zalety wykorzystania ciasteczek w PHP

- Łatwe przechowywanie informacji o sesji i preferencjach użytkownika.
- Personalizacja witryny dla użytkowników.
- Ułatwienie analizy i śledzenia zachowań użytkowników.
---
### B. Potencjalne zagrożenia i środki ostrożności

- Bezpieczeństwo danych użytkowników.
- Ograniczenie rozmiaru ciasteczek.
- Polityka prywatności i zgoda użytkownika.

---

ciasteczka nie są tylko w php mozna je użyc w innych językach wystarczy dowiedzieć się jak to się robi

---

### a teraz praktyczna częśc prezentacji!