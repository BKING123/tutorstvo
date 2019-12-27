# Tutorstvo

Uradna spletna stran Tutorstva GL [(predogled github kode)](https://plojyon.github.io/tutorstvo/)  
Objavljeno na [tutorstvo.ledina.si](https://tutorstvo.ledina.si)

*Uporabne povezave:*
+ [Mobile-friendly test](https://search.google.com/test/mobile-friendly)
+ [HTML validator](https://validator.w3.org/)
+ [Page speed test](https://developers.google.com/speed/pagespeed/insights/)

---

Opomnik:
--------
**Vsi udelezenci projekta si prizadevamo za strpnost do ostalih,
cetudi se nivoji nasih znanj razlikujejo.**  
Smo tutorji, predstavljamo skupnost oz. organizacijo, ki se *specializira*
prav v poucevanju sovrstnikov.

### Dokumentirajte VSE!
Vsak commit mora imeti naslov, ki na kratko opise spremembo,
v telesu pa naj bo podroben opis vsega, kar je bilo spremenjeno,
dodano ali odstranjeno.

Tudi commiti, ki dodajo samo komentarje so vec kot dobrodosli.


Cilji:
------
1. Vpadljivost, estetika; privabljamo bodoce stranke!
2. Hitrost, odzivnost in preprostost.
3. Vzdrzljiva koda (to pomeni koda, ki jo je lahko vzdrzevati in prilagajati - komentarji in primerna dokumentacija sta kljucega pomena); stran lahko za nami ostane se vec let.
4. Nisi edini, ki urejas stran - pusti tako kodo, ki jo lahko berejo tudi drugi!!
5. Odzivna stran, ki se prilagaja na vse velikosti ekranov
6. Jebes internet explorer, prosim da se ne ukvarjate z njegovimi "posebnostmi"

OP: Komentarjev ni nikoli prevec

<br><br>


## Nova file schema:
```
- index.html          // glavna stran
- index.css           // css za glavno stran
+ media
  - [media]           // slike, videi, glasba in druga multimedia
- kdo_smo.html        // stran s podatki o nas
- kdo_smo.css         // stil za kdo_smo.html
- poisci_tutorja.html // stran za prijavo kot dijak (ne potrebuje css)
+ eTutor
  - index.html        // glavna stran portala eTutor
  - index.css	      // stil za portal eTutor
  - register.html     // stran za registracijo tutorja
  - register.css      // stil za registracijsko stran
  - login.html        // login v portal eTutor
  - login.css         // stil za login.html
```

---


### TODO:
 - ikona za eTutor (favicon + page logo)
 - portal eTutor:
	1. Redesign glavne strani z novicami in profilom
	2. PHP backend za prijavo, registracijo in sledenje podatkom
	3. urejanje profila
	4. form, ki ga izpolnejo dijaki po vsaki ucni uri
 - dijakom prijazna podstran z navodili za urejanje spletne strani (kako dobiti github dostop in urejati datoteke, kako deluje backend, kje dobiti gesla, itd.)
 - ideje za nacin notifikacij o spremembah in novicah na spletni strani (mobilna aplikacija, facebook bot, SMS??, ...)
