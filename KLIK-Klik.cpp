#include <windows.h>
#include <ctime>
#include <iostream>
using namespace std;
void czas()
{
    bool b = false;
    int czas1 = clock();
    int czas2;
    while(!b)
    {
        czas2 = clock();
        if(czas2 - czas1 > 5000)
        {
            b = true;
        }
    }
}
void czas2()
{
    bool b=false;
    int czas1=clock();
    int czas2;
    while(!b)
    {
        czas2=clock();
        if(czas2-czas1>25)
        {
            b=true;
        }
    }
}

int main()
{
    int x;
    while(1)
    {
        cout<<"Ile klikniec?\n";
        cin>>x;
        x=x/64;
        czas();
        while(x--)
        {
            mouse_event(MOUSEEVENTF_LEFTDOWN | MOUSEEVENTF_LEFTUP,0,0,0,0);
            czas2();
        }
    }

    return 0;
}

