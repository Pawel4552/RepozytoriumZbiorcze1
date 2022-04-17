#include <iostream>

using namespace std;

void konwersja(int a,int n)
{
    int wynik;
    wynik=a%n;
    a/=n;
    if(a>0)
        konwersja(a, n);
    if(wynik<10)
    cout<<wynik;
    else
        {
            switch(wynik)
            {
                case 10:
                cout<<"A";
                break;
                case 11:
                cout<<"B";
                break;
                case 12:
                cout<<"C";
                break;
                case 13:
                cout<<"D";
                break;
                case 14:
                cout<<"E";
                break;
                case 15:
                cout<<"F";
                break;
            }
        }
    }
int main()
{
int a, s;
cout<<"Podaj liczbê dziesietn¹"<<endl;
cin>>a;
cout<<"Podaj system do zamiany <2, 16>: ";
cin>>s;
cout<<"Liczba "<<a<<" w systemie "<<s<<" to: ";
if(a>0)
    konwersja(a, s);
else
    cout<<"Liczba to 0"<<endl;
return 0;
}
