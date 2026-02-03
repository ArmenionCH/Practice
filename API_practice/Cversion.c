#include <stdio.h>
#include <cjson/cJSON.h>

int main(){

    FILE *file;

    file = fopen("/workspaces/Practice/File.json", "r");

    cJSON *cJSON_Parse(file);

    cJSON *cJSON_GetObjectItem(const cJSON *object, const char *test);
}