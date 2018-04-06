# Tutorstvo
Uradna spletna stran Tutorstva GL

Prototipi:
- [gradient-blue](https://plojyon.github.io/tutorstvo/gradient-blue) Avtor: Domen [+Yon manjsi popravki]
- [pastel-glass](https://plojyon.github.io/tutorstvo/pastel-glass) Avtor: Yon

[Template](https://plojyon.github.io/tutorstvo/template) (ne spreminjaj, zgolj za zgled)

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
1. vpadljivost, estetika; privabljamo bodoce stranke!
2. hitrost, odzivnost in preprostost.
3. vzdrzljiva koda (to pomeni koda, ki jo je lahko vzdrzevati in prilagajati - komentarji in primerna dokumentacija sta kljucega pomena); stran lahko za nami ostane se vec let.
4. odzivna stran, ki se prilagaja na vse velikosti ekranov

OP: Komentarjev ni nikoli prevec

V delu sta trenutno 2 prototipa, `gradient-blue` in `[neimenovan]`.\
Vsaka mapa v repositoriju predstavlja svoj prototip.\
*Novi prototipi zazeljeni.*

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