#include<iostream>
#include<fstream>
using namespace std;

int main()
{
    fstream plik;//zmienna plikowa
    plik.open("nazwa.txt", ios::out);// Tworzenie nowego pliku
    if(!plik)
		{
		cout <<"Nie udalo siê utworzyc pliku.";
		return 1;
	 	}else
		{
    plik<<"Czy tak utworzony plik dziala?\nSprawdzimy!\nOdpowiedz juz za chwile!"<<endl;
    }//zapisanie zawartosci do pliku
plik.close();//zamkniêcie pliku
plik.open("nazwa.txt", ios::in);//otwarcie pliku, wczytanie zawartosci do zmiennej plikwoej
if(!plik)
{
    cout<<"Nie uda³o siê";
    return 1;
}
else
{
    string zmienna;
    int a;
    //plik>>zmienna;
    while(getline(plik, zmienna))
    {
        cout<<zmienna<<endl;
    }//wypiasnie zawartosci pliku przy pomocy pêtli (linia po lini)
    cout<<"\n\n"<<endl;
    plik.close();
    plik.open("nazwa.txt", ios::in);
    while(plik>>zmienna)
    {
        cout<<zmienna<<endl;
    }//wypiasnie zawartosci pliku przy pomocy pêtli (wyraz po wyrazie)
}
plik.close();
return 0;
}
/*
ios::app	(append - dopisywanie danych do pliku) Ustawia wewnêtrzny wskaŸnik zapisu pliku na jego koniec. Plik otwarty w trybie tylko do zapisu. Dane mog¹ byæ zapisywane tylko i wy³¹cznie na koñcu pliku.
ios::ate	(at end) Ustawia wewnêtrzny wskaŸnik pliku na jego koniec w chwili otwarcia pliku.
ios::binary	(binary) Informacja dla kompilatora, aby dane by³y traktowane jako strumieñ danych binarnych, a nie jako strumieñ danych tekstowych.
ios::in	(input - wejœcie/odczyt) Zezwolenie na odczytywanie danych z pliku.
ios::out	(output - wyjœcie/zapis) Zezwolenie na zapisywanie danych do pliku.
ios::trunc	(truncate) Zawartoœæ pliku jest tracona, plik jest obcinany do 0 bajtów podczas otwierania.

*/
