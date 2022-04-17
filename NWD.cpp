#include <iostream>
using namespace std;
int nwd(int a, int b)
{
    int x=(a>b)?a%b:b%a;
    if(x==0)return (a>b)?b:a;
    return(a>b)?nwd(x, b):nwd(x, a);
}
int main()
{
int a, b;
cout<<"Podaj 2 liczby odzielone spacja"<<endl;
cin>>a>>b;
cout<<nwd(a, b)<<endl;;
return 0;
}
