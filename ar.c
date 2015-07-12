#include<stdio.h>

int r, c, max = 0, is_visited[26];
char f[22][22];

void dfs(int x, int y, int cnt)
{
	if (is_visited[f[x][y] - 'A'] != 0)return;
	if (cnt > max) max = cnt;
	is_visited[f[x][y] - 'A'] = 1;

	if (x + 1<r)   dfs(x + 1, y, cnt + 1);
	if (x - 1 >= 0)   dfs(x - 1, y, cnt + 1);
	if (y + 1<c)    dfs(x, y + 1, cnt + 1);
	if (y - 1 >= 0)  dfs(x, y - 1, cnt + 1);

	cnt--;  is_visited[f[x][y] - 'A'] = 0;
}

int main(void)
{
	int i;

	scanf("%d %d", &r, &c);
	for (i = 0; i<r; ++i)
		scanf("%s", f[i]);

	dfs(0, 0, 1);

	printf("%d", max);
	return 0;
}
