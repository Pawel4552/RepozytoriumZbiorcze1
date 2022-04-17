#include<iostream>
#include <tgmath.h>
#include <cmath>
#include <math.h>

using namespace std;

int main()
{
    float s=0, h, w, x, n, a, b;
    cout<<"podaj zakres <a, b>:";
    cin>>a>>b;
    x=a;
    cout<<"Podaj liczbê przedzia³ów"<<endl;
    cin>>n;
    h=((b-a)/n);
    for(int i=0;i<=n;i++)
    {
        w=log(x); //tu wpisujesz funcjê
        if((i==0)||(i==n))
        {
            w=w/2;
        }
        s+=w;
        x+=h;
    }
    s*=h;
    cout<<s<<endl;
    return 0;
}
