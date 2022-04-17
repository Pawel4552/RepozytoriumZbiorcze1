#include <iostream>
using namespace std;
int main()
{
int a;
cout<<"Podaj liczbe"<<endl;
cin>>a;
cout<<a<<" = ";
for(int i=2; a>=2;)
{
    while(a%i==0)
    {
        a=a/i;
        cout<<i<<" * ";
    }
        i++;
}
cout<<"1"<<endl;
return 0;
}
