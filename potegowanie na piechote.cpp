#include <iostream>
#include <cmath>

using namespace std;

unsigned long long potega(int a, int b)
{
    unsigned long long p=1;
    while(b!=0)
    {
        p*=a;
        b--;
    }
    return p;
}
int main()
{
    int a, b;
    cout<<"Podaj podstawê i wyk³adnik potêgi"<<endl;
    cin>>a>>b;
    long long pot=potega(a, b);

    cout<<"potega obliczona: "<<pot<<"\nPotêga 'dobra': "<<pow(a, b)<<endl;
    return 0;
}
