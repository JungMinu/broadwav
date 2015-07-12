#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define N 10000

int size,g,s, sx, sy, dam, mat[N + 2][N + 2];
int x[4] = { -1, 0, 1, 0 }, y[4] = { 0, -1, 0, 1 };
int visit[N][N], cnt = 0;

typedef struct _q{
	int x;
	int y;
	int time;
}Q;

int front, tail,ti=0;
Q queue[N];

void input()
{
	int cnt;
	
		scanf("%d %d", &g,&s);

		int i, j;

		for (i = 1; i <= s; i++){
			for (j = 1; j <= g; j++){
				scanf("%d", &mat[i][j]);

			}
		}
		for (i = 1; i <= s; i++){
			for (j = 1; j <= g; j++){
				printf("%d", mat[i][j]);

			}

			printf("\n");
	
		}

		scanf("%d %d", &sx, &sy);
		//scanf("%d", &dam);
	
}

void enQ(int a, int b, int time)
{
	visit[a][b] = time;

	if (time == dam)
		cnt++;

	queue[tail].x = a;
	queue[tail].y = b;
	queue[tail].time = time;
	tail++;
	//ti++;
}

Q *deQ()
{
	Q *temp;
	temp = &queue[front];
	front++;

	return temp;
}

void process()
{
	int i;

	enQ(sy, sx, 0);
	Q *temp;

	while (front < tail){
		temp = deQ();

		for (i = 0; i<4; i++){
			if (mat[temp->x + x[i]][temp->y + y[i]] == 1 && visit[temp->x + x[i]][temp->y + y[i]] == -1)
				enQ(temp->x + x[i], temp->y + y[i], temp->time + 1);
		}
	}
	//printf("%d\n", queue[tail].time);
}

void output()
{	
	printf("%d\n", queue[tail-1].time+1);
}

int main()
{
	int cnt;
	scanf("%d", &cnt);
	while (cnt--){
		memset(mat, -2, sizeof(mat));
		memset(visit, -1, sizeof(visit));
		input();
		process();
		output();
	}
	return 0;
}
