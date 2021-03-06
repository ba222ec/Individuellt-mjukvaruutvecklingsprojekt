# AF7 - Redigera användarprofil Testfall
Senast uppdaterad 27/5 2014 klo 00:30 av Svante Arvedson

## Förkrav
* Användaren har [loggat in](../Anvandningsfall/DF1-Logga-in.md) med användarnamnet *GulligaHannes* och lösenordet *12345678*.

## Testfall
<table>
    <tr>
        <th>Test-id</th>
        <th>Beskrivning</th>
        <th>Användare som redigeras</th>
        <th>Indata</th>
        <th>Förväntat resultat</th>
    </tr>
    <tr>
        <td>AF7-TF1</td>
        <td>Lyckad ändring av användaruppgifter</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>FulaHannes</i><br />Namn: <i>Hannes Hansson</i><br />Email: <i>fula_hannes@hotmail.com</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen lyckas, ändringarna sparas. Systemet visar rättmeddelande</td>
    </tr>
    <tr>
        <td>AF7-TF2</td>
        <td>Misslyckad ändring av användaruppgifter - För långt användarnamn</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannesFastMedMassaExtraBokstäver</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Användarnamn får vara max 25 tecken</i></td>
    </tr>
    <tr>
        <td>AF7-TF3</td>
        <td>Misslyckad ändring av användaruppgifter - Ogiltig epostadress</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>GulligaHannes</i>Namn: <i>Hannes Karlsson</i><br />Email: <i>gulligahanneshotmailcom</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Email ogiltig</i></td>
    </tr>
    <tr>
        <td>AF7-TF4</td>
        <td>Misslyckad ändring av användaruppgifter - Användarnamn finns redan</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>StarkaKatten</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Användarnamnet är upptaget. Välj ett annat.</i></td>
    </tr>
    <tr>
        <td>AF7-TF5</td>
        <td>Misslyckad ändring av användaruppgifter - Tomma indatafält</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i></i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Användarnamn får ej lämnas tomt</i></td>
    </tr>
    <tr>
        <td>AF7-TF6</td>
        <td>Misslyckad ändring av användaruppgifter - Fel lösenord</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>FulaHannes</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i><br /><br />Lösenord: <i>22233314</i></td>
        <td>Redigeringen misslyckas, ändringarna sparas inte. Systemet visar felmeddelande <i>Fel lösenord</i></td>
    </tr>
    <tr>
        <td>AF7-TF7</td>
        <td>Lyckad ändring av användaruppgifter endast genom att använda tangentbordet.</td>
        <td>Användarnamn: <i>GulligaHannes</i><br />Lösenord: <i>12345678</i><br />Namn: <i>Hannes Karlsson</i><br />Email: <i>gulliga_hannes@hotmail.com</i></td>
        <td>Användarnamn: <i>FulaHannes</i><br />Namn: <i>Hannes Hansson</i><br />Email: <i>fula_hannes@hotmail.com</i><br /><br />Lösenord: <i>12345678</i></td>
        <td>Redigeringen lyckas, ändringarna sparas. Systemet visar rättmeddelande.</td>
    </tr>
</table>
