#include <iostream>
#include <math.h>
using namespace std;
int main()
{
int a, i=2;
cout<<"podaj liczbê"<<endl;
cin>>a;
if(a<2)
{
   cout<<"liczba nie jest pierwsza"<<endl;
}
else
{
    bool x=true;
        while(i<=sqrt(a)&&x)
        {
            if(a%i==0)
            {
                cout<<"liczba nie jest pierwsza"<<endl;
                x=false;
            }

            i++;
        }
        if(x)
        {
            cout<<"Liczba "<<a<<" jest pierwsza"<<endl;
        }
}

return 0;
}
