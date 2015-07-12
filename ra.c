#include <stdio.h>
#include <stdlib.h>

int map[100][100], cnt = 0;
int x[10000], y[10000], l[10000];

//BFS = Breadth First Search

void enqueue(int ex, int ey, int el)
{
	x[cnt] = ex;
	y[cnt] = ey;
	l[cnt] = el;
	cnt++;
}

int main()
{
	int pos = 0, n, m, i, j, shortest = 10000, check = 1;


	scanf("%d %d", &n, &m);
	for (i = 0; i<n; i++)
	{
		for (j = 0; j<m; j++)
		{
			scanf("%1d", &map[i][j]);
		}
	}

	enqueue(0, 0, 1);

	while (check)
	{
		map[y[pos]][x[pos]] = 0;
		if (y[pos]>0 && map[y[pos] - 1][x[pos]] == 1)
			enqueue(x[pos], y[pos] - 1, l[pos] + 1);
		if (y[pos]<n - 1 && map[y[pos] + 1][x[pos]] == 1)
			enqueue(x[pos], y[pos] + 1, l[pos] + 1);
		if (x[pos]>0 && map[y[pos]][x[pos] - 1] == 1)
			enqueue(x[pos] - 1, y[pos], l[pos] + 1);
		if (x[pos]<m - 1 && map[y[pos]][x[pos] + 1] == 1)
			enqueue(x[pos] + 1, y[pos], l[pos] + 1);
		pos++;
		check = 0;
		for (i = 0; i<n; i++)
		{
			for (j = 0; j<m; j++)
			{
				if (map[i][j] != 0)
				{
					check = 1;
					break;
				}
			}
		}
	}

	for (i = 0; i < cnt; i++)
	{
		if (x[i] == m - 1 && y[i] == n - 1)
		{
			if (l[i] < shortest) shortest = l[i];
		}
	}
	printf("%d\n", shortest);
}
