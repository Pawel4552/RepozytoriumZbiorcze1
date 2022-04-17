#include <iostream>
#include<cstdlib>
#include <cmath>

using namespace std;

void zamiana(long long n, int p)
{
    if(n>0)
    {
        zamiana(n/p, p);
        switch(n%p)
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
        default:
            cout<<n%p;
        }
    }
}

void zamiana_wywolanie()
{
    int p;
    long long n;
    cout<<"Podaj liczbê i podstawê systemu"<<endl;
    cin>>n>>p;
    cout<<"Liczba "<<n<<" w systemie "<<p<<" ma postaæ: ";
    if(2<=p&&p<=16)
        if(n>0)
        zamiana(n, p);
        else
        cout<<"0";
    else
        cout<<"Z³a podstawa";
    cout<<endl;
}
bool czy_pierwsza(int a)
{
    for(int i=2;i*i<a;i++)
    {
        if(a%i==0)
        {return false;}

    }
    return true;
}
int czy_pierwsza_wywolanie()
{
    int a;
    cout<<"Podaj liczbe do sprawdzenia"<<endl;
    cin>>a;
    if(a<2)
        cout<<"liczba nie jest pierwsza"<<endl;
        else if(a=2)
            cout<<"liczba "<<a<<" jest pierwsza"<<endl;
    else
    if(czy_pierwsza(a))
        cout<<"liczba "<<a<<" jest pierwsza"<<endl;
    else
        cout<<"liczba "<<a<<" nie jest pierwsza"<<endl;

}
void doskonala_wywolanie()
{
    /*int a, s=1, i;
    cout<<"podaj liczbe"<<endl;
    cin>>a;
    for(i=2; i<a; i++)
    {
        if(a%i==0)
            s+=i;
    }
    if(a==s)
         cout<<"liczba "<<a<<" jest doskonala"<<endl;
    else
        cout<<"liczba "<<a<<" nie jest doskonala"<<endl;*/
    int a, s=1, i;
    cout<<"podaj liczbe"<<endl;
    cin>>a;
    int b=sqrt(a);
    for(i=2; i<=b ; i++)
    {
        if(a%i==0)
            s+=i+(a/i);
    }
    if(a==s)
        cout<<"liczba "<<a<<" jest doskonala"<<endl;
    else
        cout<<"liczba "<<a<<" nie jest doskonala"<<endl;
}
void rozklad()
{
    long long a;
    int k=2, pierw;
    cout<<"podaj liczbę do rozkładu"<<endl;
    cin>>a;
    cout<<"czynniki liczby "<<a<<" to: ";
    pierw=sqrt(a);
    while(a>1&&k<=pierw)
    {
        while(a%k==0)
        {
                cout<<k<<" ";
                a/=k;
        }
        ++k;
    }
}
int NWD()
{

}
int main()
{
   // zamiana_wywolanie();
   //czy_pierwsza_wywolanie();
   //doskonala_wywolanie();
    //rozklad();
    NWD();
    return 0;
}
