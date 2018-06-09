# Tutorstvo

Uradna spletna stran Tutorstva GL [(predogled github kode)](https://plojyon.github.io/tutorstvo/)  
Objavljeno na [tutorstvo.ledina.si](https://tutorstvo.ledina.si)


---

Opomnik:
--------
**Vsi udelezenci projekta si prizadevamo za strpnost do ostalih,
cetudi se nivoji nasih znanj razlikujejo.**\
Smo tutorji, predstavljamo skupnost oz. organizacijo, ki se *specializira*
prav v poucevanju sovrstnikov.

### Dokumentirajte VSE!
Vsak commit mora imeti naslov, ki na kratko opise spremembo,
v telesu pa naj bo podroben opis vsega, kar je bilo spremenjeno,
dodano ali odstranjeno.

Tudi commiti, ki dodajo samo komentarje so dobrodosli.


Cilji:
------
1. Vpadljivost, estetika; privabljamo bodoce stranke!
2. Hitrost, odzivnost in preprostost.
3. Vzdrzljiva koda (to pomeni koda, ki jo je lahko vzdrzevati in prilagajati - komentarji in primerna dokumentacija sta kljucega pomena); stran lahko za nami ostane se vec let.
4. Nisi edini, ki urejas stran - pusti tako kodo, ki jo lahko berejo tudi drugi!!
5. Odzivna stran, ki se prilagaja na vse velikosti ekranov

OP: Komentarjev ni nikoli prevec

<br><br>

## File schema:
```
- index.html     // glavna stran
- style.css      // css za glavno stran
- global.css     // css, ki je v vseh dokumentih - tukaj so vsi stili, ki se uporabljajo po celotni spletni strani
+ media
  - [media]      // slike, videi, glasba in druga multimedia
+ kdo_smo
  - index.html   // stran s podatki o nas
  - style.css    // stil za sosenji index.html
+ prijava
  - index.html   // stran, kjer te vprasa ali bi se prijavil kot dijak ali tutor
  - style.css    // css za sosednji index.html
  + dijak
    - index.html // stran za prijavo dijakov
    - style.css  // css za sosednji index.html
  + tutor
    - index.html // stran za prijavo tutorjev
    - style.css  // css za sosednji index.html
```

---


### TODO:
 - form za prijavo tutorjev (pridruzi se)
 - ureditev podstrani, mejna stran za prijavo (fork prijava- tutor/dijak)
 - login za tutorje, backend; tutorske novicke, urejanje "profila" - predmeti in termini
 - dijakom prijazna podstran z navodili za urejanje spletne strani (kako dobiti github dostop in urejati datoteke, kako deluje backend, kje dobiti gesla, itd.)
