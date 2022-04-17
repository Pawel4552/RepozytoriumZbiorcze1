#include <iostream>
using namespace std;

int main()
{
int a;
cout<<"Podaj liczbê ca³kowit¹"<<endl;
cin>>a;
cout<<"Dzielniki liczby "<<a<<" to: \n1"<<endl;
for(int i=2; i<=(a/2); i++)
{
    if(a%i==0)
    {
        cout<<i<<endl;
    }
}
cout<<a<<endl;
return 0;
}
