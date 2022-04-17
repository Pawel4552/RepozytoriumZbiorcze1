#include <windows.h>
#include <ctime>
#include <conio.h>

using namespace std;

void odczekaj()
{
    bool b = false;
    int czas1 = clock();
    int czas2;
    while(!b)
    {
        czas2 = clock();
        if(czas2 - czas1 > 100)
        {
            b = true;
        }
    }
}
void odczekaj2()
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
int main()
{
while(true)
{
    odczekaj2();
    if (kbhit())
{
    if (getch() == 32)
    {
        odczekaj();
       		mouse_event(MOUSEEVENTF_LEFTDOWN/*| MOUSEEVENTF_LEFTUP*/,0,0,0,0);
       		odczekaj();
       		mouse_event(MOUSEEVENTF_LEFTUP,0,0,0,0);
    }
}
}
return 0;
}
