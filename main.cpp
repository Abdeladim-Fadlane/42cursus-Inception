#include <iostream>
#include <vector>

void sortSquared(std::vector<int>& arr) {
    int n = arr.size();
    int i = 0; // Index for the first non-negative number

    // Find the index of the first non-negative number
    while (i < n && arr[i] < 0) {
        ++i;
    }

    int j = i - 1; // Index for the last negative number

    std::vector<int> result;

    // Merge the sorted squares of negative and positive numbers
    while (j >= 0 && i < n) {
        if (arr[j] * arr[j] < arr[i] * arr[i]) {
            result.push_back(arr[j] * arr[j]);
            --j;
        } else {
            result.push_back(arr[i] * arr[i]);
            ++i;
        }
    }

    // Add remaining squared values (if any) from negative numbers
    while (j >= 0) {
        result.push_back(arr[j] * arr[j]);
        --j;
    }

    // Add remaining squared values (if any) from positive numbers
    while (i < n) {
        result.push_back(arr[i] * arr[i]);
        ++i;
    }

    // Update the original array with the sorted squared values
    for (int k = 0; k < n; ++k) {
        arr[k] = result[k];
    }
}

int main() {
    std::vector<int> numbers = {-8, -6, -5, -2, 1, 3, 5, 6};

    // Apply the custom sorting algorithm based on squared values
    sortSquared(numbers);

    // Display the sorted squared numbers
    for (int num : numbers) {
        std::cout << num << " ";
    }

    return 0;
}
