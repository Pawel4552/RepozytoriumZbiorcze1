#include <iostream>
using namespace std;

void zamiana(long long a, int b)
{
    if(a>0)
    {
        zamiana(a/b, b);
        if(a%b>9)
        {
            switch(a%b)
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
        else
        {
            cout<<a%b;
        }
    }
}
int main()
{
    int b=1;
    long long a;
    cout<<"Podaj liczbê i podstawê systemu: ";
    cin>>a;
    while(b++<16)
    {
        cout<<"Liczba "<<a<<" w systemie "<<b<<" wynosi: "<<endl;
    if(a==0)
    {
        cout<<0;
    }
    else
    {
        zamiana(a, b);
    }
    cout<<endl;
    }
    //cin>>a>>b;

    return 0;
}
