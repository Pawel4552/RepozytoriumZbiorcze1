#include<iostream>
#include<fstream>
using namespace std;

int main()
{
    fstream plik;//zmienna plikowa
    plik.open("nazwa.txt", ios::out);// Tworzenie nowego pliku
    if(!plik)
		{
		cout <<"Nie udalo si� utworzyc pliku.";
		return 1;
	 	}else
		{
    plik<<"Czy tak utworzony plik dziala?\nSprawdzimy!\nOdpowiedz juz za chwile!"<<endl;
    }//zapisanie zawartosci do pliku
plik.close();//zamkni�cie pliku
plik.open("nazwa.txt", ios::in);//otwarcie pliku, wczytanie zawartosci do zmiennej plikwoej
if(!plik)
{
    cout<<"Nie uda�o si�";
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
    }//wypiasnie zawartosci pliku przy pomocy p�tli (linia po lini)
    cout<<"\n\n"<<endl;
    plik.close();
    plik.open("nazwa.txt", ios::in);
    while(plik>>zmienna)
    {
        cout<<zmienna<<endl;
    }//wypiasnie zawartosci pliku przy pomocy p�tli (wyraz po wyrazie)
}
plik.close();
return 0;
}
/*
ios::app	(append - dopisywanie danych do pliku) Ustawia wewn�trzny wska�nik zapisu pliku na jego koniec. Plik otwarty w trybie tylko do zapisu. Dane mog� by� zapisywane tylko i wy��cznie na ko�cu pliku.
ios::ate	(at end) Ustawia wewn�trzny wska�nik pliku na jego koniec w chwili otwarcia pliku.
ios::binary	(binary) Informacja dla kompilatora, aby dane by�y traktowane jako strumie� danych binarnych, a nie jako strumie� danych tekstowych.
ios::in	(input - wej�cie/odczyt) Zezwolenie na odczytywanie danych z pliku.
ios::out	(output - wyj�cie/zapis) Zezwolenie na zapisywanie danych do pliku.
ios::trunc	(truncate) Zawarto�� pliku jest tracona, plik jest obcinany do 0 bajt�w podczas otwierania.

*/
