1. Kas ir API?
2. Kā deklarēt mainīgo PHP valodā?
3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra.

1) API (Application Programming Interface) ir metožu un noteikumu kopums, ar kuru palīdzību dažādas programmas sazinās savā starpā un apmainās ar datiem.
2) PHP valodā mainīgos var deklarēt, izmantojot dollāra zīmi ($) un vēlamo mainīgā nosaukumu. Piemērs: $mainigais = "vērtība";
3) Laravel ir balstīts uz Model-View-Controller (MVC) arhitektūru, kurā modelis pārvalda datu bāzes piekļuvi un manipulāciju, izmantojot Blade šablonu dzinēju, attēlo datus lietotājam. Kontroleris apstrādā lietotāja pieprasījumus, sazinoties ar modeļiem, lai sagatavotu datus un nosūtītu tos skatiem.
4) ORM (Object-Relational Mapping) ir programmēšanas tehnika, kas ļauj attēlot relāciju datu bāzes ierakstus kā objektus programmatūras attīstības valodās. Šī tehnika atvieglo datu bāzes ierakstu pārvaldīšanu un manipulāciju, padarot tos pieejamus un saprotamus programmētājiem kā objekti, tādējādi izvairoties no tiešas darbības ar SQL valodu.
5) 
use App\Models\User;
$users = User::where('rating', '>', 4)->get();
