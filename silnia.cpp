#include <iostream>
using namespace std;

unsigned long long silnia(int a)
{
    if(a>0)
    return a*silnia(a-1);
    else
        return 1;
}
int main()
{
    cout<<"Podaj podstawê silni"<<endl;
    int a;
    cin>>a;
    cout<<"Silnia "<<a<<" wynosi: "<<silnia(a)<<endl;
    return 0;
}
