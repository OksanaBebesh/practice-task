# practice-task
practice-task
# Zadanie 1.
## Zaprojektuj system klas wirtualnego ZOO, który spełnia następujące wymagania:
1) Każde zwierze w ZOO ma swoje imię. Kiedy użyjemy obiektu zwierzęcia jako ciąg znaków,powinien on zwrócić gatunek oraz jego imię, np: <br/>
$dog = new Dog(/* ... */);<br/>
//...<br/>
echo $dog;<br/>
Powinno przykładowo wypisać:<br/>
Pies Duke<br/>
2) Zwierzęta powinny móc być umieszczone w ZOO (dla uproszczenia zakładamy, że zwierzęta nie zjedzą się nawzajem i nie muszą przebywać w różnych boksach).
3) Zwierzęta dzielą się na mięsożerne, roślinożerne, wszystkożerne. Dlatego powinny one przyjmować różne typy posiłków. Zwierzęta mięsożerne powinny przyjmować posiłki mięsne,
zwierzęta roślinożerne posiłki roślinne, a zwierzęta wszystkożerne powinny przyjmować oba typy posiłków.
4) Niektóre zwierzęta posiadają futro, które należy czesać by dobrze się prezentowały. Klasy zwierząt posiadających futro powinny zawierać metodę pozwalającą na ich czesanie.
5) System klas powinien obejmować następujące gatunki: tygrys, słoń, nosorożec, lis, irbis śnieżny, królik.
# Zadanie 2.
## Zaprojektuj schemat bazy danych, który będzie przechowywał autorów książek, książki i recenzje, spełniający następujące wymagania:
1) Tabela autorów powinna zawierać pola imię i nazwisko,
2) Tabela książek powinna zawierać tytuł, rok publikacji oraz numer ISBN,
## Tabela recenzji powinna zawierać ocenę w skali 1-10 oraz treść.
1. Zapisz zapytanie SQL tworzące schemat.
2. Zapisz zapytanie zwracające imiona i nazwiska autorów, wraz z liczbą napisanych przez nich książek.
3. Zapisz zapytanie tworzące perspektywę (widok) zawierający 5ciu autorów, których średnia ocen wszystkich książek jest najwyższa.
