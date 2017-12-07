/***********************************************************************/
/* e1_5a            Loesung zur Einsendeaufgabe 1                      */
/*          Ausgeben von farbigen Rechtecken auf dem Bildschirm        */
/***********************************************************************/

#include <stdio.h>
#include <stdlib.h>
#include <curses.h>

#define MAX_X 80                               /* maximal zul. Spalte  */
#define MAX_Y 25                               /* maximal zul. Zeile   */
#define BIL clear()
/***********************************************************************/
int main( void )
{
  int farbe, pos_x, pos_y;

  initscr();                        /* Initialisiert das Terminal      */
  nodelay(stdscr, TRUE);            /* getch() wartet nicht auf Return */ 
  start_color();                    /* Farbe unterstützen              */
  cbreak();                         /* Zeichen sofort weiterreichen    */
  BIL;
  do                                /* solange keine Taste gedr. ist   */
  {
    farbe = rand() % 16;            /* Farbwerte von 0 bis 15          */
    init_pair(farbe, COLOR_WHITE, farbe ); /* Farbe initialisieren     */
    attron(COLOR_PAIR(farbe));      /* Farbe festlegen                 */

    pos_x = rand() % MAX_X;         /* Spalten bis MAX_X               */
    pos_y = rand() % MAX_Y;         /* Zeilen bis MAX_Y                */
    mvaddch(pos_y, pos_x, ' ');     /* Farbiges Rechteck ausgeben      */
  } while (getch() == ERR);
  endwin();
}
/***********************************************************************/




