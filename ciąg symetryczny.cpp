#include <iostream>
#include <windows.h>

using namespace std;
int n=0;
void sym(int a, int b)
{
    if(a!=0)
    {
        sym(a-1, b+1);
        cout<<" "<<a*b;
        n++;
        Sleep(30);
        sym(a-1, b+1);
    }
}
int main()
{
    int a, b;
    cin>>a>>b;
    sym(a, b);
    cout<<endl<<n;
    return 0;
}
