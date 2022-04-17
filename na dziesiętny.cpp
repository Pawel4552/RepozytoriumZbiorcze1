#include <iostream>
#include <string>
#include <math.h>
//zamiana na dziesietne
using namespace std;
int konwersja(int a, int n, int suma)
{
    suma+=((a%10)*(pow(2, n)));
    a/=10;
    n++;
    if(a>0)
    {
        konwersja(a, n, suma);
    }
    else
        return suma;
}
int main()
{
int a, n=0, suma=0, liczba;
cout<<"Podaj liczbe binarn¹"<<endl;
cin>>a;
if(a>0)
{
    liczba=konwersja(a, n, suma);
}
else
    {
        cout<<"Liczba to 0"<<endl;
    }
cout<<"Podana liczba to "<<liczba<<endl;
return 0;
}
