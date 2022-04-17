#include <iostream>
using namespace std;
int nwd(int a, int b)
{
    int x=(a>b)?a%b:b%a;
    if(x==0)return (a>b)?b:a;
    return(a>b)?nwd(x, b):nwd(x, a);
}
int nww(int a, int b)
{
    return (a/nwd(a, b)*b);
}
int main()
{
int tab[100];
int n;
cout<<"podaj ilosc liczb"<<endl;
cin>>n;
for(int i=0;i<n; i++)
{
    cin>>tab[i];
}
int NWW=nww(tab[0], tab[1]);
for(int i=2; i<n; i++)
{
    NWW=nww(NWW, tab[i]);
}
/*
cout<<"Podaj 2 liczby odzielone spacja"<<endl;
cin>>a>>b;
int NWD=nwd(a, b);
c=a*b;
int NWW=c/NWD;*/
cout<<"Najmniejsza wspolna wielokrotnoœæ liczb ";
for(int i=0; i<n; i++)
{
    cout<<tab[i]<<", ";
}
cout<<" wynosi: "<<NWW<<endl;
return 0;
}
