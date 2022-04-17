#include <iostream>

using namespace std;

int main()
{
    int a, i=1, sum=0, mnoz=1;
    cout<<"podaj liczbê"<<endl;
    cin>>a;
    bool x=true;
    while(i<=a/2)
    {
        if(a%i==0)
        {
            sum+=i;
            mnoz*=i;
            cout<<" "<<i;
        }

        i++;
    }
    cout<<endl;
    if(sum==a)
    {
        cout<<"Liczba "<<a<<" jest doskona³a w stopniu 1"<<endl;
    }
    else
    {
         cout<<"Liczba "<<a<<" nie jest doskona³a w stopniu 1"<<endl;
    }
    if(mnoz==a)
    {
        cout<<"Liczba "<<a<<" jest doskona³a w stopniu 2"<<endl;
    }
    else
    {
         cout<<"Liczba "<<a<<" nie jest doskona³a w stopniu 2"<<endl;
    }
    return 0;
}
