#include <stdio.h>
#include <string.h>

#define max 301
int arr[max][max], temp[max][max];

void checking(int n, int m, int Nx, int Ny, int count){
	
	temp[n][m] = (count + 1)*(-1);
	
	if (m >= 0 && temp[n][m - 1]>0)//왼쪽
		checking(n, m - 1, Nx, Ny, count);
	
	if (m<Ny && temp[n][m + 1]>0)//오른쪽
		checking(n, m + 1, Nx, Ny, count);
	
	if (n >= 0 && temp[n - 1][m]>0)//위쪽
		checking(n - 1, m, Nx, Ny, count);
	
	if (n<Nx && temp[n + 1][m]>0)//아래쪽
		checking(n + 1, m, Nx, Ny, count);

}
int main(){
	int i, j, n, m, count = 0, year = 0;
	int Nx, Ny;
	scanf("%d %d", &Nx, &Ny);

	for (i = 0; i < Nx; i++)
	for (j = 0; j < Ny; j++)
		scanf("%d", &arr[i][j]);

	while (1){

		year++;
		memcpy(temp, arr, sizeof(int)*max*max);
		// for(i=0;i<Nx;i++)for(j=0;j<Ny;j++)if(arr[i][j]>0){}
		for (i = 0; i < Nx; i++)
		for (j = 0; j < Ny; j++)
		if (arr[i][j] > 0){
		
			if (j >= 0 && arr[i][j - 1] <= 0) temp[i][j]--;//왼쪽
			
			if (j<Ny && arr[i][j + 1] <= 0) temp[i][j]--;//오른쪽
			
			if (i >= 0 && arr[i - 1][j] <= 0) temp[i][j]--;//위쪽
			
			if (i<Nx && arr[i + 1][j] <= 0) temp[i][j]--;//아래쪽
		
		}

		memcpy(arr, temp, sizeof(int)*max*max);
		
		count = 0;

		for (n = 0; n<Nx; n++)
		for (m = 0; m<Ny; m++)
		if (temp[n][m]>0){
			checking(n, m, Nx, Ny, count);
			count++;
		}

		if (count >= 2 || count == 0){
			printf("%d\n", (count == 0) ? 0 : year);
			break;
		}
	}
}
